def est_base(c):
    """
    est_base est une fonction qui vérifie si un caractère
    passé en paramètre est une base de
    l'ADN (A, T, C ou G) ou non.
    """
    t_adn = ["A", "C", "T", "G"]
    return c in t_adn

def est_adn(s):
    """
    est_adn est une fonction qui teste si une chaine de caractére
    passée en paramètre correspond à un ADN (uniquement composée
    de A, T, C et G) ou non.
    """
    for lettre in s:
        if not est_base(lettre):
            return False
    return True

def arn(adn):
    """
    arn est une fonction prenant en paramètre un ADN et qui retourne l'ARN
    correspondant
    Si l'ADN n'est pas valide, on retourne rien (None)
    """
    if not est_adn(adn) :
        return None
    arn = adn.replace("T", "U")
    return arn

def arn_to_codons(chaine_arn):
    """
    arn_to_codons  est une fonction prenant en paramètre
    une chaine de caractères correspondant à de l'ARN et découpant
    cet ARN en codons.
    Elle retourne un tableau contenant la liste des codons.
    Si le nombre de nucléotides dans l'ARN n'est pas un multiple de 3,
    les derniers sont ignorés.
    """
    multiple = len(chaine_arn)
    while multiple % 3 != 0:
        multiple -= 1
    codons = []
    for i in range(0, multiple, 3):
        codons.append(chaine_arn[i:i+3])
    return codons

def load_dico_codons_aa(filename):
    """
    load_dico_codons_aa est une fonction prenant en paramètre un fichier au
    format JSON et retourne sous forme de dictionnaire la structure
    de données du fichier au format JSON
    :filename = "fichier.json"
    """
    from json import loads
    f = open(filename, "r")
    chaine_JSON = f.read()
    f.close()
    structure_JSON = loads(chaine_JSON)
    return structure_JSON


def codons_stop(dico= load_dico_codons_aa("data/codons_aa.json")):
    """
    codons_stop est une fonction prenant en paramètre un dictionnaire
    et retourne l'ensemble des codons
    qui ne sont pas les clés du dictionnaire.
    Ces derniers sont les codons stop.
    dico : dictionnaire renvoyé par load_dico_codons_aa et est le fichier codons_aa.json
    """
    codons_possibles = []
    liste_codons_stop = []
    for c1 in "AUGC":
        for c2 in "AUGC":
            for c3 in "AUGC":
                codons_possibles.append(f"{c1}{c2}{c3}")
    liste_codons_json = list(dico)
    for codon in codons_possibles:
        if codon not in liste_codons_json:
            liste_codons_stop.append(codon)
    return liste_codons_stop

def codons_to_aa(codons, dico = load_dico_codons_aa("data/codons_aa.json")):
    """
    codon_to_aa est une fonction prenant en paramètre un tableau de codons et
    un dictionnaire.
    codon_to_aa renvoie les acides aminés correspondants aux
    codons qui sont dans le tableau.
    Si on rencontre un codon stop alors la synthèse s’arrête.
    """
    tab_codons_stop = codons_stop(dico)
    codons_aa = []
    for codon in codons:
        if codon in tab_codons_stop:
            return codons_aa
        else:
            codons_aa.append(dico[codon])
    return codons_aa