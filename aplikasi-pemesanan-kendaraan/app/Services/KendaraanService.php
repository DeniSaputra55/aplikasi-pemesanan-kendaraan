<?php
namespace App\Services;

use InvalidArgumentException;
use App\Repositories\Kendaraan\KendaraanRepository;


class KendaraanService 
{
    protected $postRepository;

    public function __construct(KendaraanRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    public function store($data)
    { 
        $result = $this->postRepository->save($data);

        return $result;
    }

    public function edit($id)
    {
        return $this->postRepository->edit($id);
    }

    public function update($data)
    { 
        $result = $this->postRepository->update($data);

        return $result;
    }
} 