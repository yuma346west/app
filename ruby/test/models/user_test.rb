require 'test_helper'

class UserTest < ActiveSupport::TestCase
  # test "the truth" do
  #   assert true
  # end
  def setup
    @user = User.new(
      name: 'Example User',
      email: 'user@example.com',
      password: 'test_password',
      password_confirmation: 'test_password')
  end

  test 'should be valid' do
    assert @user.valid?
  end

  test 'should require name' do
    @user.name = '    '
    assert_not @user.valid?
  end

  test 'should require email' do
    @user.email = '    '
    assert_not @user.valid?
  end

  test 'should not be too long name' do
    @user.name = 'a' * 51
    assert_not @user.valid?
  end

  test 'should not be too long email' do
    @user.email = "#{'a' * 244}@example.com"
    assert_not @user.valid?
  end

  test 'should not be small text email' do
    mixed_case_email = 'Usermail@example.com'
    @user.email = mixed_case_email
    @user.save
    assert_equal mixed_case_email.downcase, @user.reload.email
  end

  test 'enable email address validation' do
    valid_addresses = %w[user@example.com USER@address.COM SUSER@foo.are.com first.last@foo.jp Opp+A@aaa.bix]

    valid_addresses.each do |valid_address|
      @user.email = valid_address
      assert @user.valid?, "#{valid_address.inspect} should be valid"
    end
  end

  test 'un enable email address validation' do
    invalid_addresses = %w[user@example,com USER.address.COM SUSER@foo...are. first.last@rare@foo.jp Opp+A@a+aa.bix]

    invalid_addresses.each do |invalid_address|
      @user.email = invalid_address
      assert_not @user.valid?, "#{invalid_address.inspect} should be valid"
    end
  end

  test 'should email address unique' do
    duplicate_user = @user.dup
    @user.save
    assert_not duplicate_user.valid?
  end

  test 'password should be present (no blank)' do
    @user.password = @user.password_confirmation = ' ' * 8
    assert_not @user.valid?
  end

  test 'password should have a minimum length' do
    @user.password = @user.password_confirmation = 'a' * 7
    assert_not @user.valid?
  end
end
