#wget "https://onedrive.live.com/download?cid=1F81AAE12B81E33A&resid=1F81AAE12B81E33A%21667&authkey=ADfPZyaKpAa9PCY&em=2" -O RTCC_EM-tips_2016.xlsm -o onedrive.log
echo "Downloading file"
wget "https://onedrive.live.com/download?cid=1F81AAE12B81E33A&resid=1F81AAE12B81E33A%21667&authkey=ADfPZyaKpAa9PCY&em=2" -O RTCC_EM-tips_2016.xlsm -o onedrive.log

echo "Writing html for matcher"
./rw_matcher.py

echo "Writing html for grupper"
./rw_grupper.py

echo "Creating plots"
./read_table.py

