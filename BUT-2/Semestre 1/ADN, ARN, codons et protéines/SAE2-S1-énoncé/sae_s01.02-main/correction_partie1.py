from json import *


def est_base(c):
    return len(c) == 1 and c in "ATGC"


def est_adn(s):
    i = 0
    while i < len(s) and est_base(s[i]):
        i += 1
    return i >= len(s)


def arn(adn):
    if not est_adn(adn):
        return None
    s = ""
    i = 0
    while i < len(adn):
        if adn[i] == "T":
            s += "U"
        else:
            s += adn[i]
        i += 1
    return s


def arn_to_codons(arn):
    codons = []
    i = 0
    while i < len(arn) - 2:
        codons.append(arn[i] + arn[i + 1] + arn[i + 2])
        i += 3
    return codons


def load_dico_codons_aa(filename):
    fichier = open(filename, "r")
    strjson = fichier.read()
    fichier.close()
    return loads(strjson)


def codons_stop(dico):
    stop = []
    bases = "AUGC"
    i = 0
    while i < 4:
        j = 0
        while j < 4:
            k = 0
            while k < 4:
                if bases[i] + bases[j] + bases[k] not in dico:
                    stop.append(bases[i] + bases[j] + bases[k])
                k += 1
            j += 1
        i += 1
    return stop


def codons_to_aa(codons, dico):
    aa = []
    i = 0
    while i < len(codons) and codons[i] in dico:
        aa.append(dico[codons[i]])
        i += 1
    return aa
