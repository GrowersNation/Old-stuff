class Vegetable < ActiveRecord::Base
		validates_presence_of :name, :category, :start_sowing_week, :end_sowing_week, :start_planting_out_week, :end_planting_out_week, :start_harvest_week, :end_harvest_week, :start_sowing_month, :end_sowing_month, :start_planting_out_month, :end_planting_out_month, :start_harvest_month, :end_harvest_month


	def build_coverage_for_sowing
		(1..12).collect { |i| print_cell(true, "8B4513", start_sowing_month, end_sowing_month, i) }.join
	end
	
	def build_coverage_for_planting
		(1..12).collect { |i| print_cell(true, "7FFF00", start_planting_out_month, end_planting_out_month, i) }.join
	end

	def build_coverage_for_harvest
		(1..12).collect { |i| print_cell(true, "FF8C00", start_harvest_month, end_harvest_month, i) }.join
	end

private

def print_cell(show_dot, color, s, e, i)
	if (s..e).cover? i
	 return "<td width='5%' align='center' bgcolor='#{color}'>#{(Time.now.month == i && show_dot) ? "." : ""}</td>" 
	else 
	 return "<td width='5%' align='center'>#{(Time.now.month == i && show_dot) ? "." : ""}</td>"
	 end 
end


end


