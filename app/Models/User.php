<?php

	namespace App\Models;

	// use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Database\Factories\UserFactory;
	use Illuminate\Database\Eloquent\Concerns\HasUlids;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Query\Builder;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Illuminate\Notifications\Notifiable;

	/**
	 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
	 * * @method static Builder create(array $attributes = [])
	 * * @method static Builder find(string $value)
	 * * @method public Builder update(array $values)
	 */
	class User extends Authenticatable {
		/** @use HasFactory<UserFactory> */
		use HasUlids, HasFactory, Notifiable;

		protected $table = 'users';

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var list<string>
		 */
		protected $fillable = [
			'firstname',
			'lastname',
			'email',
			'password',
		];

		protected array $dates = [
			'created_at',
			'updated_at'
		];

		/**
		 * The attributes that should be hidden for serialization.
		 *
		 * @var list<string>
		 */
		protected $hidden = [
			'password',
			'remember_token',
		];

		protected $primaryKey = 'user';
		protected $keyType = 'string';

		public $timestamps = true;
		public $incrementing = false;

		/**
		 * Get the attributes that should be cast.
		 *
		 * @return array<string, string>
		 */
		protected function casts(): array {
			return [
				'email_verified_at' => 'datetime',
				'password' => 'hashed',
			];
		}
	}
