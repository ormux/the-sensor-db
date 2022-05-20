config="/etc/ufw/before.rules"

rule="-A ufw-before-input -p icmp --icmp-type echo-request -j ACCEPT"

# change this ip to that of the sysadmin
admin=192.168.0.101

# change this ip to that of the sql shield
proxy=192.168.0.104

case $1 in
   on)
     sudo sed -e "/$rule/ s/^/#/" -i $config
     sudo ufw disable
     sudo ufw default deny incoming
     sudo ufw allow from $admin to any
     sudo ufw allow from $proxy to any
     sudo ufw enable
     sudo ufw reload
   ;;
   off)
     sudo sed -e "/$rule/ s/^#//" -i $config
     sudo ufw disable
     sudo ufw default allow incoming
     sudo ufw delete allow from $admin to any
     sudo ufw delete allow from $proxy to any
     sudo ufw enable
     sudo ufw reload
   ;;
esac
