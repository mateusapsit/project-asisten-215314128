import numpy as np

class Motor:
    def __init__(self, merk, tahun, status):
         = merk
         = tahun
         = status


class Pelanggan:
    def __init__(self, nama, nik, alamat):
         = nama
         = nik
         = alamat


class RentalMotor:
    def __init__(self):
        _list = []

    def tambah_motor(self, motor):
        _(motor)

    def cek_motor(self):
        if len(_list) == 0:
            print("Tidak ada motor yang tersedia.")
        else:
            for motor in _list:
                if  == "tersedia":
                    print(
                        f"Merk: {}, Tahun: {}, Status: {}")

    def sewa_motor(self, merk, pelanggan):
        for motor in _list:
            if  == merk and  == "tersedia":
                 = "disewa"
                print(
                    f"Motor {} berhasil disewa oleh {}.")
                print("Rincian penyewa:")
                print(f"Nama: {}")
                print(f"NIK KTM: {}")
                print(f"Alamat: {}")
                return
        print(f"Motor {merk} tidak tersedia atau sedang tidak tersedia.")

    def kembalikan_motor(self, merk):
        for motor in _list:
            if  == merk and  == "disewa":
                 = "tersedia"
                print(f"Motor {} berhasil dikembalikan.")
                return
        print(f"Motor {merk} tidak dapat dikembalikan.")

    def tampilkan_menu(self):
        print("Selamat datang di Rental Motor!")
        print("Pilih salah satu opsi:")
        print("1. Cek motor yang tersedia")
        print("2. Sewa motor")
        print("3. Kembalikan motor")
        print("0. Keluar")

    def jalankan(self):
        while True:
            _menu()
            pilihan = input("Masukkan pilihan Anda: ")

            if pilihan == "1":
                print("\nDaftar Motor Tersedia:")
                _motor()
            elif pilihan == "2":
                merk = input("Masukkan merk motor yang ingin Anda sewa: ")
                nama = input("Masukkan nama Anda: ")
                nik = input("Masukkan NIK KTM Anda: ")
                alamat = input("Masukkan alamat Anda: ")
                pelanggan = Pelanggan(nama, nik, alamat)
                _motor(merk, pelanggan)
            elif pilihan == "3":
                merk = input(
                    "Masukkan merk motor yang ingin Anda kembalikan: ")
                _motor(merk)
            elif pilihan == "0":
                print("Terima kasih telah menggunakan layanan kami!")
                break
            else:
                print("Pilihan tidak valid. Silakan masukkan pilihan yang benar.")


# Membuat objek RentalMotor
rental = RentalMotor()

# Menambahkan beberapa motor ke dalam rental
_motor(Motor("Honda", 2019, "tersedia"))
_motor(Motor("Yamaha", 2020, "tersedia"))
_motor(Motor("Suzuki", 2021, "tersedia"))

# Menjalankan aplikasi rental
()