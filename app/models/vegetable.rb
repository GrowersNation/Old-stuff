class Vegetable < ActiveRecord::Base
		validates_presence_of :start, :finish, :name, :category
end
