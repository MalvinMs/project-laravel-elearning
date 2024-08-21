<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Auth\Access\HandlesAuthorization;

class BeritaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_berita');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Berita $berita): bool
    {
        return $user->can('view_berita');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_berita');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Berita $berita): bool
    {
        return $user->can('update_berita');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Berita $berita): bool
    {
        return $user->can('delete_berita');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_berita');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Berita $berita): bool
    {
        return $user->can('force_delete_berita');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_berita');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Berita $berita): bool
    {
        return $user->can('restore_berita');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_berita');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Berita $berita): bool
    {
        return $user->can('replicate_berita');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_berita');
    }
}
