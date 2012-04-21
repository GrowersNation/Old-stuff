class CreateVegetables < ActiveRecord::Migration
  def change
    create_table :vegetables do |t|
      t.integer :start
      t.integer :finish
      t.string :name
      t.string :category

      t.timestamps
    end
  end
end
