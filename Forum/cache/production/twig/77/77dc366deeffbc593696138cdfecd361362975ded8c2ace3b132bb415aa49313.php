<?php

/* viewtopic_body.html */
class __TwigTemplate_c79ab42729183866d4e985b8c4a71291b829f053641d65adbc80bb984ebfe07b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"topic-title\">";
        // line 5
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 6
        // line 7
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 8
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["MODERATORS"] ?? null)) {
            // line 11
            echo "<p>
\t<strong>";
            // line 12
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 15
        echo "
";
        // line 16
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 17
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 20
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 23
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 24
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 26
            echo "
\t\t</div>
\t</div>
";
        }
        // line 30
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 32
        // line 33
        echo "
\t";
        // line 34
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 35
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 36
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 37
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 41
            echo "\t\t</a>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        // line 45
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 46
        echo "\t";
        // line 47
        echo "
\t";
        // line 48
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 49
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 50
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 56
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 59
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 64
        echo "
\t";
        // line 65
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 66
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 67
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 68
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 69
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 69)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 70
                echo "\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 73
            echo "\t\t</div>
\t";
        }
        // line 75
        echo "\t";
        // line 76
        echo "</div>

";
        // line 78
        // line 79
        echo "
";
        // line 80
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 81
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 87
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 88
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 92
                echo "\t\t\t\t";
                // line 93
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 94
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 95
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 96
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 97
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 99
                // line 100
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 102
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 104
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 107
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 108
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 110
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 113
            echo "
\t\t\t";
            // line 114
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 115
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 117
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 120
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 125
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 126
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 132
        echo "
";
        // line 133
        // line 134
        echo "
";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 136
            echo "\t";
            // line 137
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 138
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 140
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">
\t\t";
            // line 142
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo "<span class=\"online-text\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
                echo "</span>";
            }
            // line 143
            echo "\t\t<dl class=\"postprofile\" id=\"profile";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 144
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 146
            // line 147
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 148
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 149
                echo "\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t";
            // line 151
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 152
            // line 153
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            // line 154
            echo "\t\t\t\t";
            // line 155
            echo "\t\t\t</dt>

\t\t\t";
            // line 157
            // line 158
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</dd>";
            }
            // line 159
            echo "\t\t\t";
            // line 160
            echo "
\t\t";
            // line 161
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 162
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 163
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 164
            echo "
\t\t";
            // line 165
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 166
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 167
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 169
            echo "
\t\t";
            // line 170
            // line 171
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 172
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 173
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 175
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t";
            // line 177
            echo "
\t\t";
            // line 178
            // line 179
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 180
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 183
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 184
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 190
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 191
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 192
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 193
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 196
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 198
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 199
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 207
            echo "\t\t";
            // line 208
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 212
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 213
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 214
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 215
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 216
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 218
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 219
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 220
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 221
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 224
                echo "\t\t\t";
            }
            // line 225
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 227
            // line 228
            echo "\t\t\t<h3 ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 230
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 231
            echo "\t\t";
            // line 232
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 233
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", array())) {
                    // line 234
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 235
                    // line 236
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        // line 237
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 238
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 239
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 243
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        // line 244
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 245
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 246
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 250
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        // line 251
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 252
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 253
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 257
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        // line 258
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 259
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 260
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        // line 265
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 266
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 267
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 271
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 272
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 273
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 274
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 278
                    echo "\t\t\t\t\t";
                    // line 279
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 281
                echo "\t\t";
            }
            // line 282
            echo "\t\t";
            // line 283
            echo "
\t\t\t";
            // line 284
            // line 285
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 286
            if (($context["S_IS_BOT"] ?? null)) {
                // line 287
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 289
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 290
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 293
            echo "\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "
\t\t\t</p>
\t\t\t";
            // line 295
            // line 296
            echo "
\t\t\t";
            // line 297
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 298
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-question icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                // line 301
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 302
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 303
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 304
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 305
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 308
$context["postrow"], "S_POST_DELETED", array())) {
                // line 309
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<span><i class=\"icon fa-recycle icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                // line 312
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 313
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 314
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 317
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 318
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 322
            echo "
\t\t\t";
            // line 323
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 324
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 325
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 328
            echo "
\t\t\t<div class=\"content\">";
            // line 329
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 331
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 332
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 334
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 337
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 339
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 341
            echo "
\t\t\t";
            // line 342
            // line 343
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 344
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 345
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 346
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 347
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 348
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 349
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 350
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 351
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 352
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 353
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 355
            echo "
\t\t\t";
            // line 356
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 357
            echo "\t\t\t";
            // line 358
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>";
            }
            // line 359
            echo "
\t\t\t";
            // line 360
            // line 361
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 365
            // line 366
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 367
            // line 368
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 370
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 372
            // line 373
            echo "\t\t</div>
\t\t";
            // line 374
            // line 375
            echo "
\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 380
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "
";
        // line 383
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 384
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 384)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 386
        echo "
";
        // line 387
        // line 388
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 389
        // line 390
        echo "
\t";
        // line 391
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 392
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 393
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 394
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 396
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 398
            echo "\t\t</a>
\t";
        }
        // line 400
        echo "\t";
        // line 401
        echo "
\t";
        // line 402
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 402)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 403
        echo "
\t";
        // line 404
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 405
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 406
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 406)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 407
            echo "\t\t</form>
\t";
        }
        // line 409
        echo "
\t";
        // line 410
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 411
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 412
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 413
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 420
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 421
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 427
        echo "
\t";
        // line 428
        // line 429
        echo "
\t";
        // line 430
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 431
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 432
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 433
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 434
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 434)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 435
                echo "\t\t\t";
            } else {
                // line 436
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 438
            echo "\t\t</div>
\t";
        }
        // line 440
        echo "</div>

";
        // line 442
        // line 443
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 443)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 444
        echo "
";
        // line 445
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 446
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 447
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 448
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 451
        echo "
";
        // line 452
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 452)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1554 => 452,  1551 => 451,  1545 => 448,  1539 => 447,  1536 => 446,  1534 => 445,  1531 => 444,  1519 => 443,  1518 => 442,  1514 => 440,  1510 => 438,  1504 => 436,  1501 => 435,  1488 => 434,  1486 => 433,  1482 => 432,  1479 => 431,  1477 => 430,  1474 => 429,  1473 => 428,  1470 => 427,  1464 => 423,  1449 => 421,  1445 => 420,  1441 => 419,  1432 => 413,  1428 => 412,  1423 => 411,  1421 => 410,  1418 => 409,  1414 => 407,  1402 => 406,  1397 => 405,  1395 => 404,  1392 => 403,  1380 => 402,  1377 => 401,  1375 => 400,  1371 => 398,  1365 => 396,  1359 => 394,  1357 => 393,  1346 => 392,  1344 => 391,  1341 => 390,  1340 => 389,  1337 => 388,  1336 => 387,  1333 => 386,  1319 => 384,  1317 => 383,  1314 => 382,  1309 => 380,  1302 => 375,  1301 => 374,  1298 => 373,  1297 => 372,  1292 => 370,  1286 => 368,  1285 => 367,  1282 => 366,  1281 => 365,  1275 => 361,  1274 => 360,  1271 => 359,  1262 => 358,  1260 => 357,  1254 => 356,  1251 => 355,  1247 => 353,  1238 => 352,  1234 => 351,  1231 => 350,  1229 => 349,  1226 => 348,  1217 => 347,  1213 => 346,  1210 => 345,  1207 => 344,  1200 => 343,  1199 => 342,  1196 => 341,  1192 => 339,  1183 => 337,  1179 => 336,  1174 => 334,  1170 => 332,  1168 => 331,  1163 => 329,  1160 => 328,  1152 => 325,  1149 => 324,  1147 => 323,  1144 => 322,  1137 => 318,  1133 => 317,  1128 => 316,  1122 => 314,  1120 => 313,  1116 => 312,  1109 => 309,  1107 => 308,  1101 => 305,  1097 => 304,  1093 => 303,  1089 => 302,  1085 => 301,  1078 => 298,  1076 => 297,  1073 => 296,  1072 => 295,  1062 => 293,  1050 => 290,  1043 => 289,  1031 => 287,  1029 => 286,  1026 => 285,  1025 => 284,  1022 => 283,  1020 => 282,  1017 => 281,  1013 => 279,  1011 => 278,  1004 => 274,  998 => 273,  995 => 272,  992 => 271,  985 => 267,  979 => 266,  976 => 265,  973 => 264,  966 => 260,  960 => 259,  957 => 258,  954 => 257,  947 => 253,  941 => 252,  938 => 251,  935 => 250,  928 => 246,  922 => 245,  919 => 244,  916 => 243,  909 => 239,  903 => 238,  900 => 237,  897 => 236,  896 => 235,  893 => 234,  890 => 233,  887 => 232,  885 => 231,  882 => 230,  855 => 228,  854 => 227,  844 => 225,  841 => 224,  835 => 221,  831 => 220,  826 => 219,  824 => 218,  819 => 216,  815 => 215,  810 => 214,  807 => 213,  805 => 212,  799 => 208,  797 => 207,  790 => 202,  784 => 201,  780 => 199,  778 => 198,  771 => 196,  753 => 195,  749 => 193,  746 => 192,  742 => 191,  739 => 190,  735 => 189,  727 => 184,  723 => 183,  717 => 181,  714 => 180,  711 => 179,  710 => 178,  707 => 177,  705 => 176,  699 => 175,  688 => 173,  685 => 172,  680 => 171,  679 => 170,  676 => 169,  668 => 167,  665 => 166,  663 => 165,  660 => 164,  650 => 163,  640 => 162,  623 => 161,  620 => 160,  618 => 159,  607 => 158,  606 => 157,  602 => 155,  600 => 154,  591 => 153,  590 => 152,  587 => 151,  585 => 150,  582 => 149,  569 => 148,  566 => 147,  565 => 146,  550 => 144,  541 => 143,  535 => 142,  511 => 140,  501 => 138,  498 => 137,  496 => 136,  492 => 135,  489 => 134,  488 => 133,  485 => 132,  476 => 126,  472 => 125,  465 => 121,  462 => 120,  454 => 117,  450 => 115,  448 => 114,  445 => 113,  439 => 110,  435 => 108,  433 => 107,  424 => 104,  417 => 102,  414 => 101,  408 => 100,  407 => 99,  394 => 97,  371 => 96,  345 => 95,  333 => 94,  313 => 93,  311 => 92,  307 => 91,  293 => 88,  289 => 87,  279 => 81,  277 => 80,  274 => 79,  273 => 78,  269 => 76,  267 => 75,  263 => 73,  257 => 71,  254 => 70,  241 => 69,  239 => 68,  228 => 67,  225 => 66,  223 => 65,  220 => 64,  212 => 59,  207 => 57,  201 => 56,  196 => 54,  192 => 53,  188 => 52,  183 => 50,  180 => 49,  178 => 48,  175 => 47,  173 => 46,  160 => 45,  159 => 44,  156 => 43,  152 => 41,  146 => 39,  140 => 37,  138 => 36,  127 => 35,  125 => 34,  122 => 33,  121 => 32,  117 => 30,  111 => 26,  106 => 24,  101 => 23,  93 => 21,  91 => 20,  82 => 17,  80 => 16,  77 => 15,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  50 => 8,  47 => 7,  46 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
