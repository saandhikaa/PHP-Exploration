# Function Triangular Number Sequence using for loop
def TNS (n):
    s = 0
    for a in range(1,n+1):
        s+=a
    print(s)

def GetNum(leter):
    data = [" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]
    char = list(leter)
    code = ""

    for c in char:
        for x in range(26):
            if data[x] == c:
                code += str(x) + "."
    print("Recovery " + code + "txt")

##########################################################################

GetNum("microsoft")