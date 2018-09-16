@include ($appType.'.Includes.head')
@include ($appType.'.Includes.foot')
@include ($appType.'.Includes.sidebar')
@include ($appType.'.Includes.mainPanel')

@yield ('head')

@yield ('sidebar')

@yield ('mainPanel')

@yield ('content')

@yield ('foot')