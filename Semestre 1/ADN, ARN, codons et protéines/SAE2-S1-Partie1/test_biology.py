def test_est_base():
    from biology import est_base 
    assert est_base("A") 
    assert not est_base("z")
    assert not est_base("t")
    assert not est_base("E")
    print("La fonction est_base est fonctionnelle")

def test_est_adn():
    from biology import est_adn
    assert est_adn("ATGTCAAA")
    assert not est_adn("ATBOAATG")
    assert not est_adn('AtcGaT')
    print("La fonction est_adn est fonctionnelle")

def test_arn():
    from biology import arn
    assert arn("ATGTCAAA") == "AUGUCAAA"
    assert arn("AEGVCAAA") == None
    print("La fonction arn est fonctionnelle")
    

def test_arn_to_codons():
    from biology import arn_to_codons
    assert arn_to_codons("CGUUAGGGG") == ["CGU", "UAG", "GGG"]
    assert arn_to_codons("CGUAAU") == ["CGU", "AAU"]
    assert arn_to_codons("CGUAAUGC") == ["CGU", "AAU"]
    print("La fonction arn_to_codons est fonctionnelle")

def test_load_dico_codons_aa() :
    from biology import load_dico_codons_aa
    dico = load_dico_codons_aa("data/codons_aa.json")
    assert dico['UUU'] == 'Phenylalanine'
    assert dico['CUG'] == 'Leucine'
    assert dico['CUA'] == 'Leucine'
    assert 'UGA' not in list(dico)
    assert 'UAA' not in list(dico)
    print("La fonction load_dico_codons_aa est fonctionnelle")

def test_codons_stop() :
    from biology import codons_stop
    assert codons_stop() == ['UAA', 'UAG', 'UGA']
    assert 'UAA' in codons_stop()
    assert 'AAU' not in codons_stop()
    print("La fonction codons_stop est fonctionnelle")
    
def test_codons_to_aa():
    from biology import codons_to_aa
    assert codons_to_aa(['UGA', 'AGG', 'UAA']) == []
    assert codons_to_aa(["CGU", "AAU", "UAA", "GGG", "CGU"]) == ["Arginine", "Asparagine"]
    assert codons_to_aa(['UUU', 'CUA', 'AUG', 'UAG']) == ["Phenylalanine", "Leucine", "Methionine"]
    print("La fonction codons_to_aa est fonctionnelle")