class ConstantsHelper {

// Status code response
const STATUS_SUCCESS = 200;
const STATUS_ERR_SERVER = 500;
const STATUS_ERR_VALIDATION = 422;
const STATUS_ERR_UNAUTHORIZED = 401;

// Status messages response
const MSG_SUCCESS_GET = 'Sukses!';
const MSG_SUCCESS_SAVE = 'Data berhasil disimpan!';
const MSG_SUCCESS_DELETE = 'Data berhasil dihapus!';
@@ -18,5 +20,11 @@ class ConstantsHelper {
const MSG_ERR_DELETE = 'Data gagal dihapus!';
const MSG_ERR_VALIDATION = 'Input data dengan benar!';

// Status transaksi peminjaman buku
const BLM_APPROVE = 0;
const SDH_APPORVE = 1;
const DIPINJAM = 2;
const DIKEMBALIKAN = 3;
const SELESAI = 4;

}