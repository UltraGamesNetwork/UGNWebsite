cd /home/u30574p38877/domains/unlimitedgamesnetwork.com/website
date
date +"%Y-%m-%d %H:%I:%S"
var=$(date)
var=`date`
echo "==============================================="
git pull origin master
php artisan migrate
echo "==============================================="
echo "Deze pull is uitgevoerd om:"
date +"%H:%M:%S"
echo "Op:"
date +"%d-%m-%Y"
