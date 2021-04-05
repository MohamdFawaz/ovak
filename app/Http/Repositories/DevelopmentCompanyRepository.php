<?php


namespace App\Http\Repositories;

use App\Models\DevelopmentCompany;


class DevelopmentCompanyRepository implements UserRepositoryInterface
{
    /**
     * Get's a record by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return DevelopmentCompany::find($id);
    }

    /**
     * Get's all records.
     *
     * @return mixed
     */
    public function all()
    {
        return DevelopmentCompany::query()->with(['project','project.projectAsking'])->get();
    }

    /**
     * Deletes a record.
     *
     * @param int
     */
    public function delete($id)
    {
        DevelopmentCompany::destroy($id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        DevelopmentCompany::find($id)->update($data);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function paginate($numberPerPage)
    {
        return DevelopmentCompany::query()->with(['project','project.projectAsking'])->paginate($numberPerPage);
    }
}
