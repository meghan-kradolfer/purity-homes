Import to localhost
- Export database from live site
- When using an exported database if returning syntax error replace all `TYPE=INNODB` whith `Engine=InnoDB`
- Change `wp_config.php` to match local database
- Run in local database (change tables, site urls to match)

`UPDATE wp_txgc_options SET option_value = replace(option_value, 'http://purityhomes.meghankradolfer.com', 'http://localhost:8888/meghan-kradolfer/purity-homes') WHERE option_name = 'home' OR option_name = 'siteurl';` 

`UPDATE wp_txgc_posts SET post_content = replace(post_content, 'http://purityhomes.meghankradolfer.com', 'http://localhost:8888/meghan-kradolfer/purity-homes');`

`UPDATE wp_txgc_postmeta SET meta_value = replace(meta_value,'http://purityhomes.meghankradolfer.com','http://localhost:8888/meghan-kradolfer/purity-homes');`

