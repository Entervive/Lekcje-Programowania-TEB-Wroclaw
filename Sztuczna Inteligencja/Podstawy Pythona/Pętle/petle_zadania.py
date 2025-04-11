sum = 0
for i in range(1, 101):
    sum += i
print(sum)

sum = 0
for i in range(1, 101):
    if (i % 2 == 0):
        sum += i
print(sum)

for i in range(1, 101):
    if(i % 5 == 0 and i % 3 == 0):
        print("FizzBuzz")
    elif(i % 3 == 0):
        print("Fizz")
    elif(i % 5 == 0):
        print("Buzz")

for i in range(1, 11):
    if (i != 7):
        print(i)