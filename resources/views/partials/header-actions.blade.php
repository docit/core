<div class="btn-group">
    @if(isset($projectsList))
        <div class="btn-group">
            <div class="btn btn-primary btn-sm">Project</div>
            <a href="#" type="button" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle btn btn-primary btn-sm">
                @yield('projectName', $projectName)
            </a>

            <div class="dropdown-menu">
                @foreach($projectsList as $displayName => $url)
                    <a href="{{ $url }}" class="dropdown-item">{{ $displayName }}</a>
                @endforeach
            </div>
        </div>
    @endif
    @if(isset($projectRefList))
        <div class="btn-group">
            <div class="btn btn-primary btn-sm">Version</div>
            <a href="#" type="button" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle btn btn-primary btn-sm">
                @yield('projectRef', $projectRef)
            </a>

            <div class="dropdown-menu">
                @foreach($projectRefList as $ref => $url)
                    <a href="{{ $url }}" class="dropdown-item">{{ $ref }}</a>
                @endforeach
            </div>

        </div>
    @endif
</div>
