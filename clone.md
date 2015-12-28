## Cloning Instructions of mtenancy repository for Windows

###Assumptions:
	1) Installed Xampp with php version >5.5.9 with OpenSSL extension and mysql
	2) Installed composer with shell menu commands
	3) Have Github account 
	4) Have Github_Desktop installed for windows.
	
###Cloning Steps:
	1)  Open Github_Desktop and goto options menu. 
	2)  Add blick36t account under <Accounts> and Add Name & github Account email under <Configure git>.
	3)  Then clone the project into your local xampp>htdocs folder.
	4)  Right click the folder in windows explorer and choose <Composer Install>.
	5)  Wait for it to complete and display command prompt.
	6)  Execute the following command <Copy ".env.example" ".env">.
	7)  Open the browser type <localhost/mtenancy/public/survey> in the address bar.
	8)  If you see any error on encryptor or key error then in cmd prompt execute <php artisan key:generate>, else continue the following steps.
	9)  Open ".env" file and change the database credentials according to your requirement.
	10) Create a Schema named "survey" in your mysql db server.
	11) Open cmd prompt and exceute <php artisan migrate> and <php artisan db:seed>.
	
Now the mtenancy repo is cloned to your local environment and you can start colloborating.