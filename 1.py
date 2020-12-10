# Avame input faili ja loeme faili listi
#kordus üle faili ridade ja loeme rea
    #rida numbriks
    #vastus = 2020 -number
    # kontrollime
f   =  open("input.txt","r")
numbers = [int(x) for x in f.readlines()]
#print(numbers)
for number1 in numbers:
    for number2 in numbers:
        answer  = 2020 - number1 - number2

        if answer in numbers:
            print(answer*number1*number2)
