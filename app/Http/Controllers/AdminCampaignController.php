<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class AdminCampaignController extends Controller
{
    //
    public function index()
    {
        $campaigns = Campaign::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.campaign.index', [
            'campaigns' => $campaigns
        ]);
    }

    public function report_summary(Campaign $campaign)
    {
        // $campaigns = Campaign::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.campaign.report', [
            // 'campaigns' => $campaigns,
            'campaign' => $campaign
        ]);
    }

    public function report_list(Campaign $campaign)
    {
        $campaigns = Campaign::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.campaign.report-list', [
            'campaigns' => $campaigns
        ]);
    }

    public function add()
    {
        return view('admin.campaign.add');
    }

    public function store(Request $request) 
    {
        //
    }

    public function edit(Campaign $campaign)
    {
        return view('admin.campaign.edit', [
            'campaign' => $campaign
        ]);

    }

    public function update(Request $request) 
    {
        //
    }

    public function destroy(Campaign $campaign) 
    {
        //
    }
}
