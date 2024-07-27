%toko_buku.pl
:- dynamic toko_buku/3.

%Fakta toko buku: toko_buku(ID, Tema, Penulis).

%Tambah Buku

tambah_buku(ID, Tema, Penulis) :-
    assertz(toko_buku(ID, Tema, Penulis)).

%Baca Semua Buku

baca_buku :-
    toko_buku(ID, Tema, Penulis),
    format('ID: ~w, Tema: ~w, Author: ~w~n', [ID, Tema, Penulis]),
    fail.
baca_buku.

% Update Buku

update_buku(ID, Tema, Penulis):-
    retract(toko_buku(ID, _, _)),
    assertz(toko_buku(ID, TemaBaru, PenulisBaru)).

%Hapus Buku

delete_buku(ID) :-
    retract(toko_buku(ID, _, _)).

