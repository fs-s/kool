res = 0
f = open("input2.txt")
lines = f.readlines()
for line in lines:
    splitted = line.split()
    minmax = splitted[0].split("-")
    char = splitted[1].strip(":")
    c = splitted[2].count(char)
    if c >= int(minmax[0]) and c <= int(minmax[1]):
        res += 1

print(res)
