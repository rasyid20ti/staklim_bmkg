from ftplib import FTP
from datetime import datetime

start = datetime.now()
ftp = FTP('182.16.248.193')
ftp.login('xmlpm','xmlpm@#98765')

# Get All Files
files = 'pm25_pk2.xml'

# Print out the files
for file in files:
	print("Downloading..." + file)
	ftp.retrbinary("RETR " + file ,open("/var/www/html/web-staklim-kampar/application/views/api/" + file, 'wb').write)

ftp.close()

end = datetime.now()
diff = end - start
print('All files downloaded for ' + str(diff.seconds) + 's')