def vokal(text):
    hasilV=""
    vokals = "ieaouIEAOU"
    
    for huruf in text:
        if huruf in vokals:
            hasilV += huruf
    return hasilV
def kons(text):
    hasilK=""
    vokals = "ieaouIEAOU"
    
    for huruf in text:
        if huruf not in vokals:
            hasilK += huruf
    return hasilK

def printWords(kata):
    return kata;

kata = printWords("ARKADEMY")
kataV = vokal(kata)
kataV = list(kataV)
kataK = kons(kata)
kataK = list(kataK)

for i in range(0, len(kataV)):
    print(kataV[i])
for i in range(0, len(kataK)):
    print(kataK[i])