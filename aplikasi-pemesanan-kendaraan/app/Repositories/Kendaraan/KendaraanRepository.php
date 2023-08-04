<?php
namespace App\Repositories\Kendaraan;

use App\Models\Kendaraan;

class KendaraanRepository {
    protected $kendaraan;

    public function __construct(Kendaraan $kendaraan)
    {   
        $this->kendaraan = $kendaraan;
    }

    public function getAll()
    {
        return $this->kendaraan->get();
    }

    public function save($data)
    {
        $post = new $this->kendaraan;
        $post->mobil = $data['mobil'];
        $post->image = $data['image'];
        $post->konsumsi_bbm = $data['konsumsi_bbm'];
        $post->jadwal_service = $data['jadwal_service'];
        $post->jumlah = $data['jumlah'];
        $post->save();

        return $post->fresh();
    }

    public function edit($id)
    {
        $this->kendaraan->where('id', $id);
    }

    public function update($data)
    {
        $post = new $this->kendaraan;
        $post->mobil = $data['mobil'];
        $post->image = $data['image'];
        $post->konsumsi_bbm = $data['konsumsi_bbm'];
        $post->jadwal_service = $data['jadwal_service'];
        $post->jumlah = $data['jumlah'];
        $post->save();

        return $post->fresh();
    }
}