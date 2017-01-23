<?php

/* DevLeaguesBundle::macros.html.twig */
class __TwigTemplate_82374ead0f8e958e605e49955670ec81e0bdbb483a969a6e88c96a6a00c2922c extends Twig_Template
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
        $__internal_ad58fb53489b2cd3cd212f95707f7c658ff81cd75138efee7627ea649791b1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad58fb53489b2cd3cd212f95707f7c658ff81cd75138efee7627ea649791b1fe->enter($__internal_ad58fb53489b2cd3cd212f95707f7c658ff81cd75138efee7627ea649791b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::macros.html.twig"));

        $__internal_e49a1cdd9195d0373810be407363e3f825aa595c737ee4a929fe5dc07d640694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49a1cdd9195d0373810be407363e3f825aa595c737ee4a929fe5dc07d640694->enter($__internal_e49a1cdd9195d0373810be407363e3f825aa595c737ee4a929fe5dc07d640694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::macros.html.twig"));

        // line 21
        echo "
";
        // line 42
        echo "
";
        // line 50
        echo "
";
        // line 69
        echo "
";
        
        $__internal_ad58fb53489b2cd3cd212f95707f7c658ff81cd75138efee7627ea649791b1fe->leave($__internal_ad58fb53489b2cd3cd212f95707f7c658ff81cd75138efee7627ea649791b1fe_prof);

        
        $__internal_e49a1cdd9195d0373810be407363e3f825aa595c737ee4a929fe5dc07d640694->leave($__internal_e49a1cdd9195d0373810be407363e3f825aa595c737ee4a929fe5dc07d640694_prof);

    }

    // line 1
    public function getleague_reduced($__league__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "league" => $__league__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b417d260a7948e9bf1fc5816c10ac993365438d9a1c91427ab6e383694635269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b417d260a7948e9bf1fc5816c10ac993365438d9a1c91427ab6e383694635269->enter($__internal_b417d260a7948e9bf1fc5816c10ac993365438d9a1c91427ab6e383694635269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "league_reduced"));

            $__internal_fdf9138893a5e6d071d3b53eea7e32149aa535d3e459bace0fd5e168e203e5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fdf9138893a5e6d071d3b53eea7e32149aa535d3e459bace0fd5e168e203e5e1->enter($__internal_fdf9138893a5e6d071d3b53eea7e32149aa535d3e459bace0fd5e168e203e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "league_reduced"));

            // line 2
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_league", array("leagueId" => $this->getAttribute(($context["league"] ?? $this->getContext($context, "league")), "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["league"] ?? $this->getContext($context, "league")), "name", array()), "html", null, true);
            echo "</h3></a>

\t\t\t\t\t\t<p>description</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
            
            $__internal_fdf9138893a5e6d071d3b53eea7e32149aa535d3e459bace0fd5e168e203e5e1->leave($__internal_fdf9138893a5e6d071d3b53eea7e32149aa535d3e459bace0fd5e168e203e5e1_prof);

            
            $__internal_b417d260a7948e9bf1fc5816c10ac993365438d9a1c91427ab6e383694635269->leave($__internal_b417d260a7948e9bf1fc5816c10ac993365438d9a1c91427ab6e383694635269_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getchallenge_reduced($__challenge__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "challenge" => $__challenge__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_82521c6fd6297c5603d1c2ad6f522b335b1581c9ca329318546c03b43ea7762b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_82521c6fd6297c5603d1c2ad6f522b335b1581c9ca329318546c03b43ea7762b->enter($__internal_82521c6fd6297c5603d1c2ad6f522b335b1581c9ca329318546c03b43ea7762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "challenge_reduced"));

            $__internal_c24132a1be24f1bf3205694c0582c6245b9be064fbaf96575b994d2e9d491a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c24132a1be24f1bf3205694c0582c6245b9be064fbaf96575b994d2e9d491a8f->enter($__internal_c24132a1be24f1bf3205694c0582c6245b9be064fbaf96575b994d2e9d491a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "challenge_reduced"));

            // line 23
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_challenge", array("challengeId" => $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "name", array()), "html", null, true);
            echo "</h3></a>

\t\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
            
            $__internal_c24132a1be24f1bf3205694c0582c6245b9be064fbaf96575b994d2e9d491a8f->leave($__internal_c24132a1be24f1bf3205694c0582c6245b9be064fbaf96575b994d2e9d491a8f_prof);

            
            $__internal_82521c6fd6297c5603d1c2ad6f522b335b1581c9ca329318546c03b43ea7762b->leave($__internal_82521c6fd6297c5603d1c2ad6f522b335b1581c9ca329318546c03b43ea7762b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getmy_challenge_reduced($__challenge__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "challenge" => $__challenge__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1f9415e1c7bd9878f1b027ec59748291edd21468cf783995ec7a97e5a1843e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1f9415e1c7bd9878f1b027ec59748291edd21468cf783995ec7a97e5a1843e15->enter($__internal_1f9415e1c7bd9878f1b027ec59748291edd21468cf783995ec7a97e5a1843e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "my_challenge_reduced"));

            $__internal_d5fb71ec833c30bf565d7dbddd2a71d2280a38a0aa8d982632a6419af25a2564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d5fb71ec833c30bf565d7dbddd2a71d2280a38a0aa8d982632a6419af25a2564->enter($__internal_d5fb71ec833c30bf565d7dbddd2a71d2280a38a0aa8d982632a6419af25a2564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "my_challenge_reduced"));

            // line 44
            echo "<tr>
  <th><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_challenge", array("challengeId" => $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "name", array()), "html", null, true);
            echo "</a></th>
  <th>End : ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "endTimestamp", array()), "m/d/Y"), "html", null, true);
            echo "</th>
  <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "description", array()), "html", null, true);
            echo "</th>
</tr>
";
            
            $__internal_d5fb71ec833c30bf565d7dbddd2a71d2280a38a0aa8d982632a6419af25a2564->leave($__internal_d5fb71ec833c30bf565d7dbddd2a71d2280a38a0aa8d982632a6419af25a2564_prof);

            
            $__internal_1f9415e1c7bd9878f1b027ec59748291edd21468cf783995ec7a97e5a1843e15->leave($__internal_1f9415e1c7bd9878f1b027ec59748291edd21468cf783995ec7a97e5a1843e15_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getuser_reduced($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e099af4af14036bc4e560dd01ff9696714cc1b7d1d68119898d61dea1a1d0820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e099af4af14036bc4e560dd01ff9696714cc1b7d1d68119898d61dea1a1d0820->enter($__internal_e099af4af14036bc4e560dd01ff9696714cc1b7d1d68119898d61dea1a1d0820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_reduced"));

            $__internal_0e3ebfba75f15f5465bb5dbcd854e62c246745bf542f781917c9c92ffde49c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0e3ebfba75f15f5465bb5dbcd854e62c246745bf542f781917c9c92ffde49c02->enter($__internal_0e3ebfba75f15f5465bb5dbcd854e62c246745bf542f781917c9c92ffde49c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_reduced"));

            // line 52
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
            
            $__internal_0e3ebfba75f15f5465bb5dbcd854e62c246745bf542f781917c9c92ffde49c02->leave($__internal_0e3ebfba75f15f5465bb5dbcd854e62c246745bf542f781917c9c92ffde49c02_prof);

            
            $__internal_e099af4af14036bc4e560dd01ff9696714cc1b7d1d68119898d61dea1a1d0820->leave($__internal_e099af4af14036bc4e560dd01ff9696714cc1b7d1d68119898d61dea1a1d0820_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getnews_reduced($__news__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "news" => $__news__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_199f43f0f92dd6a0103d59b67186d5e792d92c1291237953e0a9aab9b7503eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_199f43f0f92dd6a0103d59b67186d5e792d92c1291237953e0a9aab9b7503eeb->enter($__internal_199f43f0f92dd6a0103d59b67186d5e792d92c1291237953e0a9aab9b7503eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "news_reduced"));

            $__internal_68834d5cf42d9172924153d4d30cf8a9c0a33fee8bf4048b095c69c1a347e523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_68834d5cf42d9172924153d4d30cf8a9c0a33fee8bf4048b095c69c1a347e523->enter($__internal_68834d5cf42d9172924153d4d30cf8a9c0a33fee8bf4048b095c69c1a347e523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "news_reduced"));

            // line 71
            echo "    <li class=\"time-label\">
        <span class=\"bg-red\">
            ";
            // line 73
            echo " 01/01/2017
        </span>
    </li>
    <li>
        <i class=\"fa fa-envelope bg-blue\"></i>
        <div class=\"timeline-item\">
            <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

            <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "name", array()), "html", null, true);
            echo "</a></h3>

            <div class=\"timeline-body\">
                ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "content", array()), "html", null, true);
            echo "
            </div>

            <div class=\"timeline-footer\">
                <p>
                \tTags : javascript machine-learning challenge
                </p>
            </div>
        </div>
    </li>
";
            
            $__internal_68834d5cf42d9172924153d4d30cf8a9c0a33fee8bf4048b095c69c1a347e523->leave($__internal_68834d5cf42d9172924153d4d30cf8a9c0a33fee8bf4048b095c69c1a347e523_prof);

            
            $__internal_199f43f0f92dd6a0103d59b67186d5e792d92c1291237953e0a9aab9b7503eeb->leave($__internal_199f43f0f92dd6a0103d59b67186d5e792d92c1291237953e0a9aab9b7503eeb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 84,  319 => 81,  309 => 73,  305 => 71,  287 => 70,  252 => 57,  245 => 52,  227 => 51,  203 => 47,  199 => 46,  193 => 45,  190 => 44,  172 => 43,  139 => 30,  132 => 28,  125 => 23,  107 => 22,  70 => 7,  63 => 2,  45 => 1,  34 => 69,  31 => 50,  28 => 42,  25 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro league_reduced(league) %}
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"{{ path('show_league', {leagueId: league.id})}}\"><h3>{{league.name}}</h3></a>

\t\t\t\t\t\t<p>description</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}

{% macro challenge_reduced(challenge) %}
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"{{ path('show_challenge',{challengeId: challenge.id}) }}\"><h3>{{challenge.name}}</h3></a>

\t\t\t\t\t\t<p>{{ challenge.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}

{% macro my_challenge_reduced(challenge) %}
<tr>
  <th><a href=\"{{ path('show_challenge', {challengeId: challenge.id}) }}\">{{challenge.name}}</a></th>
  <th>End : {{ challenge.endTimestamp|date(\"m/d/Y\") }}</th>
  <th>{{ challenge.description }}</th>
</tr>
{% endmacro %}

{% macro user_reduced(user) %}
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"{{ path('show_user', {userId: user.id}) }}\"><h3>{{user.username}}</h3></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"\"
\t\t\t\t\t\talt=\"image de la ligue\"
\t\t\t\t\t\tclass=\"img-responsive img-circle\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}

{% macro news_reduced(news) %}
    <li class=\"time-label\">
        <span class=\"bg-red\">
            {#{{ news.date }}#} 01/01/2017
        </span>
    </li>
    <li>
        <i class=\"fa fa-envelope bg-blue\"></i>
        <div class=\"timeline-item\">
            <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

            <h3 class=\"timeline-header\"><a href=\"#\">{{ news.name }}</a></h3>

            <div class=\"timeline-body\">
                {{ news.content }}
            </div>

            <div class=\"timeline-footer\">
                <p>
                \tTags : javascript machine-learning challenge
                </p>
            </div>
        </div>
    </li>
{% endmacro %}
", "DevLeaguesBundle::macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/macros.html.twig");
    }
}
