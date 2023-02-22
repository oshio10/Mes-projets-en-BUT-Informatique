def test_nextIndice():
    from biology import nextIndice
    assert nextIndice(["bonjour", "hello", "buongiorno", "ciao", "bye"], 0, ["hello", "bye"]) == 1
    assert nextIndice(["bonjour", "hello", "buongiorno", "ciao", "bye"], 2, ["hello", "ciao", "bye"]) == 3
    assert nextIndice(["bonjour", "hello", "buongiorno", "ciao", "bye"], 1, ["France", "Espagne"]) == 5
    print("la fonction nextIndice est fonctionnelle")  

def test_decoupe_sequence():
    from biology import decoupe_sequence
    assert decoupe_sequence(["val1", "début", "val2", "val3", "end", "val4", "fin", "begin", "val5", "fin", "val6"], ["début", "begin"], ["fin", "end"]) == [["val2", "val3"], ["val5"]]
    print("la fonction decoupe_sequence est fonctionnelle")

def test_codons_to_seq_codantes():
    from biology import codons_to_seq_codantes
    assert codons_to_seq_codantes(["CGU", "UUU", "AUG", "CGU", "AUG", "AAU", "UAA", "AUG", "GGG", "CCC",  "CGU", "UAG", "GGG"]) == [["CGU", "AUG", "AAU"], ["GGG", "CCC", "CGU"]]
    print("la fonction codons_to_seq_codantes est fonctionnelle")
    
def test_seq_codantes_to_seq_aas():
    from biology import seq_codantes_to_seq_aas
    assert seq_codantes_to_seq_aas([ ["CGU", "AUG", "AAU"], ["GGG", "CCC", "CGU"] ]) == [ ["Arginine", "Methionine", "Asparagine"], ["Glycine", "Proline", "Arginine"] ]
    assert seq_codantes_to_seq_aas([ ["UGC"], ["UAC", "CAU", "CAC"], ["UCG", "CCU"] ]) == [ ["Cysteine"], ["Tyrosine", "Histidine", "Histidine"], ["Serine", "Proline"] ]
    print("la fonction seq_codantes_to_seq_aas est fonctionnelle")
    
def test_adn_encode_molecule():
    from biology import adn_encode_molecule
    assert adn_encode_molecule("CGTTTTATGCGTATGAATTAAATGGGGCCCCGTTAGGGG", ["Glycine", "Proline", "Arginine"]) == True
    print("la fonction adn_encode_molecule est fonctionnelle")