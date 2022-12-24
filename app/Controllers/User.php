<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as ModelsUser;
use CodeIgniter\I18n\Time;

class User extends BaseController
{
    public function index()
    {
        $model = new ModelsUser();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $model = model(ModelsUser::class);

        $validation = [
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];

        if ($this->validate($validation)) {
            $model->save([
                'name' => $this->request->getPost('name'),
                'age' => $this->request->getPost('age'),
                'address' => $this->request->getPost('address'),
                'phone' => $this->request->getPost('phone'),
            ]);

            return redirect()->route('users.index')->with('success', 'Success add new data');
        }

        return redirect()->back()->with('failed', 'Failed add data');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $model = new ModelsUser();
        $data = array(
            'user' => $model->find($id),
        );

        // var_dump($data);
        // die;

        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new ModelsUser();

        $validation = [
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];

        if ($this->validate($validation)) {
            $model->update($id, [
                'name' => $this->request->getPost('name'),
                'age' => $this->request->getPost('age'),
                'address' => $this->request->getPost('address'),
                'phone' => $this->request->getPost('phone')
            ]);

            return redirect()->route('users.index')->with('success', 'Data updated successfully');
        }

        return redirect()->back()->with('failed', 'Failed add data');
    }

    public function destroy($id)
    {
        // var_dump($id);
        // die;
        $model = new ModelsUser();
        $model->where('id', $id)->delete();
        return redirect()->route('users.index')->with('success', 'Data deletion successfully');
    }
}
