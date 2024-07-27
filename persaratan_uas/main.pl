% main.pl
:- consult('toko_buku.pl').

% Menu utama
menu :-
    writeln('1. admin'),
    writeln('2. guru'),
    writeln('2. siswa'),
    read(Choice),
    process(Choice).

% Proses pilihan
process(1) :-
    writeln('Masukkan ID:'),
    read(ID),
    writeln('Masukkan username:'),
    read(Title),
    writeln('Masukkan password:'),
    read(Author),
    add_buku(ID, Title, Author),
    writeln('Data berhasil ditambahkan!'),
    menu.

process(2) :-
    writeln('Data Sekolah:'),
    data_sekolah,
    menu.

process(3) :-
    writeln('Masukkan ID buku yang ingin diubah:'),
    read(ID),
    writeln('Masukkan Title baru:'),
    read(NewTitle),
    writeln('Masukkan Author baru:'),
    read(NewAuthor),
    update_buku(ID, NewTitle, NewAuthor),
    writeln('Buku berhasil diubah!'),
    menu.

process(4) :-
    writeln('Masukkan ID buku yang ingin dihapus:'),
    read(ID),
    delete_buku(ID),
    writeln('Buku berhasil dihapus!'),
    menu.

process(5) :-
    writeln('Terima kasih! Keluar dari program.').

process(_) :-
    writeln('Pilihan tidak valid, coba lagi.'),
    menu.

% Jalankan menu utama saat program dimulai
:- menu.
