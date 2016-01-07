#!/usr/bin/env ruby
require 'rubygems'
require 'thor'
require 'rest-client'
require 'json'
require 'ruby-wpdb'


class Redirector < Thor
  include Thor::Actions

  # these are not the tasks that you seek
  no_tasks do
    # load rails based on environment

    def get_resource_area_tags(uri)
      request_options = {}

      begin
        result = RestClient.get("#{uri}/api/data/resource_area_tags", :content_type => :json, :accept => :json)
        JSON.parse(result)
      rescue StandardError => e
        $stderr.puts "Failed to get resource_area_tags reason: #{e.message}"
        {}
      end
    end

    def get_wordpress_categories
      # initialize WPDB
      WPDB.from_config
      terms = []
      WPDB::TermTaxonomy.where(:taxonomy => 'category').where(:parent => 0).each do |tt|
        terms << tt.term.slug
      end
      terms
    end

    def export_resource_area_tags_hash_to_redirection_directives(tags_hash, uri_host)
      return if tags_hash.empty?
      filecontents = "#\n# This file was autogenerated at #{Time.now.utc}\n#\n\n"
      tags_hash.each do |commmunity_name, tags|
        if(!tags.empty?)
          filecontents += "# #{commmunity_name}\n"
          tags.each do |tagname|
            gsubtext = '[\\\+_\s]'
            redirect_string = "redirectmatch permanent ^/#{tagname.gsub(' ',gsubtext)}/?$ http://#{uri_host}/#{tagname.gsub(' ','_')}"
            filecontents += "#{redirect_string}\n"
          end
          filecontents += "\n"
        end
      end
      filecontents
    end

    def export_wordpress_categories_to_redirection_directives(wordpress_categories,uri_host)
      return if wordpress_categories.empty?
      filecontents = "#\n# This file was autogenerated at #{Time.now.utc}\n#\n\n"
      wordpress_categories.each do |term|
        redirect_string = "RewriteCond %{REQUEST_URI} !^/category/#{term}/?$"
        filecontents += "#{redirect_string}\n"
      end
      filecontents += "RewriteRule ^/category/(.*) http://#{uri_host}/category/$1 [L]"
      filecontents
    end

  end

  desc "dump_resource_redirects", "Dump output from resource areas to stdout"
  method_option :host,:default => 'articles.extension.org', :aliases => "-h", :desc => "Host to query and redirect to"
  def dump_resource_redirects
    tags_hash = get_resource_area_tags("https://#{options[:host]}")
    puts export_resource_area_tags_hash_to_redirection_directives(tags_hash,options[:host])
  end

  desc "dump_category_redirects", "Dump output from category redirects to stdout"
  method_option :host,:default => 'articles.extension.org', :aliases => "-h", :desc => "Host to redirect to"
  def dump_category_redirects
    wordpress_categories = get_wordpress_categories
    puts export_wordpress_categories_to_redirection_directives(wordpress_categories,options[:host])
  end


  desc "write_redirect_files", "Dump output from resource areas and category redirects to specified files"
  method_option :host,:default => 'articles.extension.org', :aliases => "-h", :desc => "Host to query and redirect to"
  method_option :resource_redirects_file, :desc => "Resource redirects file", :required => true
  method_option :category_redirects_file, :desc => "Category redirects file", :required => true
  def write_redirect_files
    tags_hash = get_resource_area_tags("https://#{options[:host]}")
    resource_redirects = export_resource_area_tags_hash_to_redirection_directives(tags_hash,options[:host])
    if(!resource_redirects.nil?)
      $stdout.puts "Redirecting the following resource areas: #{tags_hash.values.flatten.join(', ')}"
      File.open(options[:resource_redirects_file], 'w') {|f| f.write(resource_redirects) }
    else
      $stderr.puts "resource_redirects are blank, not overwriting"
    end

    wordpress_categories = get_wordpress_categories
    category_redirects =  export_wordpress_categories_to_redirection_directives(wordpress_categories,options[:host])
    if(!category_redirects.nil?)
      $stdout.puts "Not redirecting the following wordpress categories: #{wordpress_categories.join(', ')}"
      File.open(options[:category_redirects_file], 'w') {|f| f.write(category_redirects) }
    else
      $stderr.puts "category are blank, not overwriting"
    end
  end


end

Redirector.start