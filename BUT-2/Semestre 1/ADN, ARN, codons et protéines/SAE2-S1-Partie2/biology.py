######
# Partie 1 corrigée
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
######
# Partie 2

def nextIndice(tab, ind, elements):
    """
    tab: le premier tableau
    ind: un indice de tab
    elements: le deuxième tableau
    """
    for indice, val in enumerate(tab):         # on parcourt le tableau et ses indices 
        for indice in range (ind, len(tab)):  # on considere les indices de tab à partir de ind
            for k in elements:       # on parcout le tableau elements
                if tab[indice]==k:  # on verifie la 1ere egalite entre val et k à partir de l indice ind de tab 
                    return indice  # puis on retourne l indice de tab correspondant à cette egalité
    return len(tab)

def decoupe_sequence(seq, start, stop):
    seq_decoupee = []              # seq_decoupee correspond au tableau des sequences
    seq_debut = 0             
    while seq_debut < len(seq):   # parcourt du tableau seq(en parametre)
        soustab = []             # les sous sequence de seq_decoupee
        seq_debut = nextIndice(seq,seq_debut,start) # identification du 1er val de start à partir de l indice 0 de seq
        seq_fin = nextIndice(seq,seq_debut,stop)   # identification du 1er val de stop à partir de l indice 0 de seq
        while seq_debut < seq_fin :    # il y a eu une sequence que si seq_debut est identifer en premier 
            val = seq[seq_debut+1]    # val correspond aux valeurs entre seq_debut et seq_fin dans seq
            if val not in stop:      # si le premier val entre seq_debut et seq_fin n est pas dans stop
                soustab.append(val) # on commence alors à les ajouter au sous tableau de sequençage
            seq_debut+=1           # on enregistre tout les val jusqu'à satisfaire la condition du while imbriqué
        if len(soustab) != 0:     # on peut ne pas trouver de sequence dans seq et là sous tab est vide
            seq_decoupee.append(soustab) # on ajoute sous_tab dans la sequence finale que s'il n est pas vide
        seq_debut=seq_fin+1      # on fait un saut de seq_debut à seq_fin pour continuer le sequençage
    return seq_decoupee
        

def codons_to_seq_codantes(seq_codons, dico = load_dico_codons_aa("data/codons_aa.json") ):
    start=["AUG"]
    stop = codons_stop(dico = load_dico_codons_aa("data/codons_aa.json"))
    seq_codantes = decoupe_sequence(seq_codons, start, stop)
    return seq_codantes


def seq_codantes_to_seq_aas(seq_codantes, dico = load_dico_codons_aa("data/codons_aa.json") ):
    seq_aa = []
    for seq_codante in seq_codantes:
        sequence = []
        for codon in seq_codante:
            sequence.append(dico[codon])
        seq_aa.append(sequence)
    return seq_aa


def adn_encode_molecule(adn, molecule,dico = load_dico_codons_aa("data/codons_aa.json")):
    adn_to_arn = arn(adn)
    codons_arn = arn_to_codons(adn_to_arn)
    seq_codante = codons_to_seq_codantes(codons_arn, dico = load_dico_codons_aa("data/codons_aa.json"))
    seq_aa = seq_codantes_to_seq_aas(seq_codante,  dico = load_dico_codons_aa("data/codons_aa.json"))
    if molecule in seq_aa:
        return True
 