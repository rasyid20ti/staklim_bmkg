# Import Module
import ftplib
 
# Fill Required Information
HOSTNAME = "182.16.248.193"
USERNAME = "xmlpm"
PASSWORD = "xmlpm@#98765"
 
# Connect FTP Server
ftp_server = ftplib.FTP(HOSTNAME, USERNAME, PASSWORD)
 
# force UTF-8 encoding
ftp_server.encoding = "utf-8"
 
# Enter File Name with Extension
filename = "pm25_pk2.xml"
 
# Write file in binary mode
with open(filename, "wb") as file:
    # Command for Downloading the file "RETR filename"
    # ftp_server.retrbinary(f"RETR {filename}", file.write)
    # ftp_server.retrbinary(f"RETR {filename}", file("/var/www/html/web-staklim-kampar/application/views/api/" + file, 'wb').write)
 
# Get list of files
ftp_server.dir()
 
# Display the content of downloaded file
file= open(filename, "r")
print('File Content:', file.read())
 
# Close the Connection
ftp_server.quit()