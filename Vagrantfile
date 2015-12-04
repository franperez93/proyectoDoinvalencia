# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  
 	config.vm.box = "avenuefactory/lamp"
	config.vm.network :forwarded_port, guest: 80, host: 4567

	config.vm.synced_folder "www/", "/var/www"
	config.vm.synced_folder ".", "/vagrant", disabled: true

 end
