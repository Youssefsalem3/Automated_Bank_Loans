# Automated_Bank_Loans
**Removing the non-necessary bank meetings using the power of Ai!**

## **So how is this done ?**

**Many banks do give loans to people based on a meeting where they ask some questions to the applicant but what if we can ask the applicants these questions before they even come to the bank this can help the banks in many different ways!**

![Form](https://www.imgbly.com/ib/hjLoJeo5Oa.png)

## **So after filling the form the applicant will get notifed if his/her application is approved and how likley will they get the loan and if they won't based on the answer they will get notifed to try again later as they are no match here is an example :**

### **Here is a footage of an applicant being a candidate his/her contact information will directly be stored in the bank database to contact him/her for a meeting:**

![Accepted](https://www.imgbly.com/ib/4GyeT4hAYM.png)

### **Here is an applicant request being rejected so he/she will be shown a message to try again after one month and his/her contact data will not be saved so this helps in decreasing the meetings the bank make !


![Declined](https://www.imgbly.com/ib/eDXBL3ZE0r.png)

## **So here is the process of making :**
1- I created the form layout using blade on laravel where i used html,css and javascript to make the front-end of the website.

2-I started preprocessing , analysing the dataset then i trained the model and saved it .

3-After these steps i created a Restful api using flask to use as an endpoint in laravel.

4-Finally i connected a controller with the form and in the controller in laravel i called the api giving it the input data and getting the percentage.

5-In the controller if the percantage is more than 50% i insert the contact data into my database.

### **That's it feel free to check the code!**

### **Here is a demo video for the process : [Demo]( https://clipchamp.com/watch/j7MkXnih0Wh)
