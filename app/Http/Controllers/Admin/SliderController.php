<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\BrandType;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Slider::select('id', 'brand_type', 'brand', 'description', 'image', 'button_link')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('checkbox', function ($row) {
                    $html = '
                    <label class="checkboxs">
                        <input type="checkbox" />
                        <span class="checkmarks"></span>
                    </label>
                    ';
                    return $html;
                })
                ->addColumn('image', function ($row) {
                    $image_url = Storage::disk('local')->url($row->image);
                    $html = '
                    <img src=' . $image_url . '/>
                    ';
                    return $html;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <a class="me-3" href="' . route('admin.slider.edit', $row->id) . '">
                        <img src=' . asset("template/img/icons/edit.svg") . ' alt="img" />
                    </a>
                    <a onclick="deleteData(' . $row->id . ')" class="me-3 confirm-text">
                        <img src=' . asset("template/img/icons/delete.svg") . ' alt="img" />
                    </a>
                    ';
                    return $btn;
                })
                ->rawColumns(['checkbox', 'image', 'action'])
                ->make(true);
        }

        return view('pages.admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name', 'ASC')->with('brand_types')->get();
        // $brandTypes = BrandType::orderBy('name', 'ASC')->get();
        return view('pages.admin.slider.add', [
            'brands'        => $brands,
            // 'brand_types'   => $brandTypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_type'    => 'required|string|max:255',
            'brand'         => 'required|string|max:255',
            'description'   => 'required|string|max:255',
            'status'        => 'required|numeric',
            'image'         => 'required|mimes:jpg,bmp,png',
            'button_link'   => 'required|string|max:255'
        ]);

        $slider = new Slider;


        $slider->brand_type = $request->brand_type;
        $slider->brand = $request->brand;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = Str::slug($request->title) . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/slider', $fileNameToStore, 'public');

            // Add value
            $slider->image = $pathFile;
        }

        $slider->save();

        return to_route('admin.slider.index')->with('success', 'Input Data Success!');
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
        $item = Slider::findOrFail($id);
        // $brandTypes = BrandType::orderBy('name', 'ASC')->get();
        $brands = Brand::orderBy('name', 'ASC')->with('brand_types')->get();

        return view('pages.admin.slider.edit', [
            'item'  => $item,
            'brands' => $brands
            // 'brand_types' => $brandTypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'brand_type'    => 'required|string|max:255',
            'brand'         => 'required|string|max:255',
            'description'   => 'required|string|max:255',
            'image'         => 'nullable|mimes:jpg,bmp,png',
            'button_link'   => 'required|string|max:255'
        ]);

        $slider = Slider::findOrFail($id);

        $slider->brand_type = $request->brand_type;
        $slider->brand = $request->brand;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;

        if ($request->hasFile('image')) {
            $filenameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = Str::slug($request->title) . '_' . time() . '.' . $extension;
            $pathFile           = $request->file('image')->storeAs('assets/slider', $fileNameToStore, 'public');

            // Add value
            $slider->image = $pathFile;
        }

        $slider->save();

        return to_route('admin.slider.index')->with('success', 'Update Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Slider::findOrFail($id);

        if (!$item->delete()) {
            return response()->json([
                'success' => false,
                'message' => 'Hapus Data Error',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Hapus Data Berhasil',
        ], 200);
    }
}
