def zadJeden():
    temp = float(input("Podaj temperature ciała "))

    if temp <= 36.6:
        print("Masz prawidłową temperature ciała")
    elif temp >= 36.6 and temp <= 37.5:
        print("Masz stan podgorączkowy")
    elif temp > 37.5:
        print("Masz gorączke")
    else:
        print("Zły warunek")
        
def zadDwa():
    liczba = int(input("Podaj Liczbe "))
    
    if liczba % 2 == 0:
        liczba = liczba + 8
        print(liczba)
    else:
        liczba = liczba * 5
        print(liczba)
        
def zadTrzy():
    masa = float(input("Podaj swoją wagę w KG "))
    wzrost = float(input("Podaj swój wzorst w metrach "))
    
    bmi = masa/(wzrost**2)
    
    print("Twoje BMI To")
    print(bmi)
    
    if bmi < 18:
        print("Niedowaga")
    elif bmi >= 18 and bmi <= 25:
        print("Waga prawidłowa")
    elif bmi >= 20 and bmi <= 30:
        print("Nadwaga")
    elif bmi > 30:
        print("Otyłość")
    else:
        print("Nieprawidłowe dane")