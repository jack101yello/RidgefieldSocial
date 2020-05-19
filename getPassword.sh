#/bin/bash
touch passwordTemp.txt
cat users.txt | grep `cat usernameFile.txt` | cut -d ',' -f 4 > passwordTemp.txt
