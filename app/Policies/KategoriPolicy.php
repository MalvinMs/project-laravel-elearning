<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Auth\Access\HandlesAuthorization;

class KategoriPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kategori');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function view(User $user, Kategori $kategori): bool
    {
        return $user->can('view_kategori');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_kategori');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function update(User $user, Kategori $kategori): bool
    {
        return $user->can('update_kategori');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function delete(User $user, Kategori $kategori): bool
    {
        return $user->can('delete_kategori');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kategori');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function forceDelete(User $user, Kategori $kategori): bool
    {
        return $user->can('force_delete_kategori');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kategori');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function restore(User $user, Kategori $kategori): bool
    {
        return $user->can('restore_kategori');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kategori');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kategori  $kategori
     * @return bool
     */
    public function replicate(User $user, Kategori $kategori): bool
    {
        return $user->can('replicate_kategori');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kategori');
    }

}
