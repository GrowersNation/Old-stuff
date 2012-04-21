class VegetablesController < ApplicationController
  # GET /vegetables
  # GET /vegetables.json
  def index
    @month = params[:month] == nil ? Time.now.month : params[:month].to_i
    @vegetables = Vegetable.where(":start_month >= start AND :end_month <= finish ", {:start_month => @month, :end_month => @month})
    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @vegetables }
    end
  end

  # GET /vegetables/1
  # GET /vegetables/1.json
  def show
    @vegetable = Vegetable.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @vegetable }
    end
  end

  # GET /vegetables/new
  # GET /vegetables/new.json
  def new
    @vegetable = Vegetable.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @vegetable }
    end
  end

  # GET /vegetables/1/edit
  def edit
    @vegetable = Vegetable.find(params[:id])
  end

  # POST /vegetables
  # POST /vegetables.json
  def create
    @vegetable = Vegetable.new(params[:vegetable])

    respond_to do |format|
      if @vegetable.save
        format.html { redirect_to vegetables_path, notice: 'Vegetable was successfully created.' }
        format.json { render json: @vegetable, status: :created, location: @vegetable }
      else
        format.html { render action: "new" }
        format.json { render json: @vegetable.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /vegetables/1
  # PUT /vegetables/1.json
  def update
    @vegetable = Vegetable.find(params[:id])

    respond_to do |format|
      if @vegetable.update_attributes(params[:vegetable])
        format.html { redirect_to @vegetable, notice: 'Vegetable was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @vegetable.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /vegetables/1
  # DELETE /vegetables/1.json
  def destroy
    @vegetable = Vegetable.find(params[:id])
    @vegetable.destroy

    respond_to do |format|
      format.html { redirect_to vegetables_url }
      format.json { head :no_content }
    end
  end
end
