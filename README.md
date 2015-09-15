# Installation Instructions

    cd /var/www/html
    git clone git@github.com:iamcal/the5k.org.git
    ln -s /var/www/html/the5k.org/site.conf /etc/apache2/sites-available/the5k.org.conf
    a2ensite the5k.org
    service apache2 reload
