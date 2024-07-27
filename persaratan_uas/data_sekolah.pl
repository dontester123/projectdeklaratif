%data_sekolah.pl
:- dynamic data_sekolah/3.

%Fakta data sekolah: data_sekolah(ID, username, password).

%Tambah data

add_buku(ID, username, password) :-
    assertz(data_sekolah(ID, username, password)).

%Hasil data

hasil_buku :-
    data_sekolah(ID, username, password),
    format('ID: ~w, username: ~w, password: ~w~n', [ID, username, password]),
    fail.
hasil_buku.

%Tambah Data

tambah_data(ID, username, password):-
    retract(data_sekolah(ID, _, _)),
    assertz(data_sekolah(ID, Tambahbaru)).

%Hapus Data

delete_data(ID) :-
    retract(data_sekolah(ID, _, _)).

