                                               <div class="widget-content widget-content-area br-6 mt-3" id="userstable">
                                                <div class="table-responsive">
                                              <table id="html5-extension" class="table table-hover non-hover" style="width:100%">

                                <thead>
                                    <tr>
                                       <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Package</th>
                                        <th>Phone number</th>
                                        <th>Assigned Plan</th>
                                        <th>Terms And Conditions</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              <tbody>
                                     @if($users->isNotEmpty())
                                    @foreach($users as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td class="font-weight-bold"><a href="{{ url('/user_profile/'.$value->id) }}">{{ $value->name }}</a></td>
                                        <td>{{ $value->email }}</td>
                                        @if($value->package_id != null)
                                        <td>{{ $value->package->title }}</td>
                                        @else
                                        <td></td>
                                        @endif
                                        <td></td>
                                        <td></td>
                                        @if($value->accepted_terms_and_conditions != 0)
                                        <td>Accepted</td>
                                        @else
                                        <td>Rejected</td>
                                        @endif
                                        <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                        @if($value->status != 0)
                                        <td>Active</td>
                                        @else
                                        <td></td>
                                        @endif
                                        <td><a href="{{ url('/user_profile/'.$value->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                            <a href="javascript:void(0)" class="delete_option" data-id="{{ $value->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                                            <a href="{{ url('/user_profile/'.$value->id.'/edit') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a></td>
                                      {{--  <td><a href="{{ url('/profile_questions/'.$value->id.'/edit') }}"><i data-feather="edit"></i></a>
                                           <a href="{{ url('/profile_questions/'.$value->id.'/delete') }}"><i data-feather="trash"></i></a>
                                           @if($value->options != [null])
                                           <a href="javascript:void(0)" class="ml-1 view_options" data-id="{{$value->id}}"><i data-feather="eye"></i></a></td>
                                           @endif
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                    @else
                                     <td colspan="5" class="text-center">No Users Available</td>
                                    @endif
                                </tbody>
                            </table>
                        </div>
</div>