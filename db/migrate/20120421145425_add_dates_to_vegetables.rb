class AddDatesToVegetables < ActiveRecord::Migration
  def change
  	add_column :vegetables, :start_sowing_week, :integer
  	add_column :vegetables, :end_sowing_week, :integer
  	add_column :vegetables, :start_planting_out_week, :integer
  	add_column :vegetables, :end_planting_out_week, :integer
  	add_column :vegetables, :start_harvest_week, :integer
  	add_column :vegetables, :end_harvest_week, :integer
  	add_column :vegetables, :start_sowing_month, :integer
  	add_column :vegetables, :end_sowing_month, :integer
  	add_column :vegetables, :start_planting_out_month, :integer
  	add_column :vegetables, :end_planting_out_month, :integer
  	add_column :vegetables, :start_harvest_month, :integer
  	add_column :vegetables, :end_harvest_month, :integer
  end
end
