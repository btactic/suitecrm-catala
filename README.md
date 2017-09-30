# Suitecrm Catalan translation
![Logo_Generalitat](images/Generalitat_de_Catalunya.jpg)

Aquesta traducció ha sigut possible gràcies al suport del Departament de Cultura de la Generalitat de Catalunya.

## Instal·lar l'última distribució
Pot instal·lar la traducció utilitzant l'última distribució disponible a https://github.com/btactic/suitecrm-catala/releases  

Només ha de descarregar l'última distribució i instal·lar-la des del Carregador de Mòduls.

## Instal·lar a partir del codi font
IMPORTANT: Aquestes instruccions són per a sistemes basats en UNIX.  

Si ho prefereix, pot generar una versió instal·lable de la traducció a partir del codi font, per a poder gaudir de les últimes millores que encara no han estat incloses a l'última distribució.  

Si vol utilitzar aquest mètode, és necessari que disposi del paquet `git` instal·lat al seu ordinador. Si no el té instal·lat, el pot instal·lar mitjançant aquestes comandes:
```
# apt-get update
# apt-get -y install git
```
Ara ja pot generar una versió instal·lable de la traducció utilitzant aquestes comandes:
```
$ git clone https://github.com/btactic/suitecrm-catala.git
$ ./release.sh
```
Per últim, accedeixi a la seva instal·lació de SuiteCRM i instal·li `suitecrm-catala.zip` des del Carregador de Mòduls.
