class Bank:
    def __init__(self, num, name, type):
        self.num = num
        self.name = name
        self.type = type
        self.balance = 0

    def details(self):
        print("Account Number: ",self.num)
        print("Account Name: ",self.name)
        print("Account Type: ",self.type)
        print("Account Balance: ",self.balance)

    def deposit(self):
        amount = int(input("Enter the amount to deposit: "))
        self.balance += amount
        print(amount,"Deposited!! \nBalance: ",self.balance)

    def withdraw(self, amount):
        
        if amount > self.balance:
            print("Insufficient Balance!")
        else:
            self.balance -= amount
            print(amount,"Withdrawn!! \nBalance: ",self.balance)
    

n = int(input("Enter Account Number: "))
name = input("Enter Account Name: ")
type = input("Enter Account Type: ")

person = Bank(n, name, type)

choice = 1
while choice != 4:
    print("\n")
    choice = int(input("1 for Account Details \n2 for Deposit \n3 to Withdraw \n4 to exit \nEnter your choice: "))

    if choice == 1:
        person.details()

    elif choice == 2:
        person.deposit()

    elif choice == 3:
        person.withdraw(int(input("Enter the amount to withdraw: ")))
