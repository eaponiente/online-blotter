<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserRequest;
use App\Models\Station;
use App\Models\User;
use App\Services\Users\CreateUser;
use App\Services\Users\UpdateUser;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stations = Station::oldest('name')->get();

        return view('admin.users.create', compact('stations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request, CreateUser $createUser)
    {
        $user = $createUser->execute($request->validated());

        return redirect()->route('users.index')->with([
            'success' => 'User ' . $user->last_name .', ' . $user->first_name . ' has been created.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stations = Station::oldest('name')->get();

        $edit = User::find($id);
        return view('admin.users.create', compact('edit', 'stations'));
    }

    /**
     * @param StoreUserRequest $request
     * @param $id
     * @param UpdateUser $updateUser
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreUserRequest $request, $id, UpdateUser $updateUser)
    {
        $user = User::find($id);
        $updateUser->execute($user, $request->validated());

        return redirect()->route('users.index')->with([
            'success' => 'User ' . $user->last_name .', ' . $user->first_name . ' has been updated.'
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index')->with([
            'success' => 'User ' . $user->last_name .', ' . $user->first_name . ' has been deleted.'
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function getUsers(Request $request)
    {
        $sortColumn = $request->input('order')[0]['column'];
        $sortDirection = $request->input('order')[0]['dir'];

        switch ($sortColumn) {
            case 1:
                $sortField = 'last_name';
                break;
            case 2:
                $sortField = 'position';
                break;
            default:
                $sortField = 'station_name';
                break;
        }

        if ($request->ajax()) {
            $userQuery = User::query()
                ->leftJoin('stations', 'users.station_id', '=', 'stations.id')
                ->select([
                    'users.*',
                    'stations.name as station_name'
                ]);
            return DataTables::of($userQuery->orderBy($sortField, $sortDirection)->get())
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('users.edit', ['user' => $row->id]) . '" class="edit btn btn-success btn-sm text-white">Edit</a>';
                    return $actionBtn;
                })
                ->addColumn('fullname', function ($row) {
                    return $row->last_name . ', ' . $row->first_name;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

}
