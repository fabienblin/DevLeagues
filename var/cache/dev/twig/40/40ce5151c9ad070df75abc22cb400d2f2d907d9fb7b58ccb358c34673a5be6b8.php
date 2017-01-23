<?php

/* @DevLeagues/macros.html.twig */
class __TwigTemplate_a38c46b1fbbfb3a4e60b9a257cf61234a41492db259e069a8ffb3245627e25b4 extends Twig_Template
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
        $__internal_71501b2d2d86b8da81df1e2d0f8a378255e0b146c067a5dc7993a3cf5c49ddd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71501b2d2d86b8da81df1e2d0f8a378255e0b146c067a5dc7993a3cf5c49ddd1->enter($__internal_71501b2d2d86b8da81df1e2d0f8a378255e0b146c067a5dc7993a3cf5c49ddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/macros.html.twig"));

        $__internal_0f183c21662c2b81a73f552cbbcda5f9881e5ca5457664388b1004842eafbc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f183c21662c2b81a73f552cbbcda5f9881e5ca5457664388b1004842eafbc44->enter($__internal_0f183c21662c2b81a73f552cbbcda5f9881e5ca5457664388b1004842eafbc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/macros.html.twig"));

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
        
        $__internal_71501b2d2d86b8da81df1e2d0f8a378255e0b146c067a5dc7993a3cf5c49ddd1->leave($__internal_71501b2d2d86b8da81df1e2d0f8a378255e0b146c067a5dc7993a3cf5c49ddd1_prof);

        
        $__internal_0f183c21662c2b81a73f552cbbcda5f9881e5ca5457664388b1004842eafbc44->leave($__internal_0f183c21662c2b81a73f552cbbcda5f9881e5ca5457664388b1004842eafbc44_prof);

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
            $__internal_0a2c42be0658f4a1fedfcf59968f52065b4d52cc4eb461401efe7e4042d67f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0a2c42be0658f4a1fedfcf59968f52065b4d52cc4eb461401efe7e4042d67f6e->enter($__internal_0a2c42be0658f4a1fedfcf59968f52065b4d52cc4eb461401efe7e4042d67f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "league_reduced"));

            $__internal_8ea44b6cfea687b390831e2907acee855b09864d9ad45212652b6d4ecc3bb2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8ea44b6cfea687b390831e2907acee855b09864d9ad45212652b6d4ecc3bb2bf->enter($__internal_8ea44b6cfea687b390831e2907acee855b09864d9ad45212652b6d4ecc3bb2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "league_reduced"));

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
            
            $__internal_8ea44b6cfea687b390831e2907acee855b09864d9ad45212652b6d4ecc3bb2bf->leave($__internal_8ea44b6cfea687b390831e2907acee855b09864d9ad45212652b6d4ecc3bb2bf_prof);

            
            $__internal_0a2c42be0658f4a1fedfcf59968f52065b4d52cc4eb461401efe7e4042d67f6e->leave($__internal_0a2c42be0658f4a1fedfcf59968f52065b4d52cc4eb461401efe7e4042d67f6e_prof);

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
            $__internal_06f583371a27131701dc559663694a9c0d90a1336f9c00ce4854bb1add25fc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_06f583371a27131701dc559663694a9c0d90a1336f9c00ce4854bb1add25fc08->enter($__internal_06f583371a27131701dc559663694a9c0d90a1336f9c00ce4854bb1add25fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "challenge_reduced"));

            $__internal_c710234ac30b378aab3a904da6a373462c340af46c567dda59329ea16103d771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c710234ac30b378aab3a904da6a373462c340af46c567dda59329ea16103d771->enter($__internal_c710234ac30b378aab3a904da6a373462c340af46c567dda59329ea16103d771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "challenge_reduced"));

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
            
            $__internal_c710234ac30b378aab3a904da6a373462c340af46c567dda59329ea16103d771->leave($__internal_c710234ac30b378aab3a904da6a373462c340af46c567dda59329ea16103d771_prof);

            
            $__internal_06f583371a27131701dc559663694a9c0d90a1336f9c00ce4854bb1add25fc08->leave($__internal_06f583371a27131701dc559663694a9c0d90a1336f9c00ce4854bb1add25fc08_prof);

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
            $__internal_36c8ed47c805b47a59c847dba794caf8d66a33de9e7a95024025703c697f4137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_36c8ed47c805b47a59c847dba794caf8d66a33de9e7a95024025703c697f4137->enter($__internal_36c8ed47c805b47a59c847dba794caf8d66a33de9e7a95024025703c697f4137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "my_challenge_reduced"));

            $__internal_c208956096b2e76ebbf4d9f40015f72617e570ada744ebca2395c10d03d4fd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c208956096b2e76ebbf4d9f40015f72617e570ada744ebca2395c10d03d4fd4a->enter($__internal_c208956096b2e76ebbf4d9f40015f72617e570ada744ebca2395c10d03d4fd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "my_challenge_reduced"));

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
            
            $__internal_c208956096b2e76ebbf4d9f40015f72617e570ada744ebca2395c10d03d4fd4a->leave($__internal_c208956096b2e76ebbf4d9f40015f72617e570ada744ebca2395c10d03d4fd4a_prof);

            
            $__internal_36c8ed47c805b47a59c847dba794caf8d66a33de9e7a95024025703c697f4137->leave($__internal_36c8ed47c805b47a59c847dba794caf8d66a33de9e7a95024025703c697f4137_prof);

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
            $__internal_820fe5cbeab5bc34d5f11d72cd5059efe66a7a30239bf38456d687756c004143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_820fe5cbeab5bc34d5f11d72cd5059efe66a7a30239bf38456d687756c004143->enter($__internal_820fe5cbeab5bc34d5f11d72cd5059efe66a7a30239bf38456d687756c004143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_reduced"));

            $__internal_924697cdec3f7b46f4144b684f847562068a67d45b975d33f72e645d5e5379d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_924697cdec3f7b46f4144b684f847562068a67d45b975d33f72e645d5e5379d0->enter($__internal_924697cdec3f7b46f4144b684f847562068a67d45b975d33f72e645d5e5379d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_reduced"));

            // line 52
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"#\"><h3>";
            // line 57
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
            
            $__internal_924697cdec3f7b46f4144b684f847562068a67d45b975d33f72e645d5e5379d0->leave($__internal_924697cdec3f7b46f4144b684f847562068a67d45b975d33f72e645d5e5379d0_prof);

            
            $__internal_820fe5cbeab5bc34d5f11d72cd5059efe66a7a30239bf38456d687756c004143->leave($__internal_820fe5cbeab5bc34d5f11d72cd5059efe66a7a30239bf38456d687756c004143_prof);

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
            $__internal_454f6232717cd7c7ca26c84033c8adbb146b9b5eaffac29979c69ce3cf81042e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_454f6232717cd7c7ca26c84033c8adbb146b9b5eaffac29979c69ce3cf81042e->enter($__internal_454f6232717cd7c7ca26c84033c8adbb146b9b5eaffac29979c69ce3cf81042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "news_reduced"));

            $__internal_d68c497b973bb47a1c72ca9626992339a744d9efced447ac0ca34b8f08d7e545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d68c497b973bb47a1c72ca9626992339a744d9efced447ac0ca34b8f08d7e545->enter($__internal_d68c497b973bb47a1c72ca9626992339a744d9efced447ac0ca34b8f08d7e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "news_reduced"));

            // line 71
            echo "    <!-- timeline time label -->
    <li class=\"time-label\">
        <span class=\"bg-red\">
            ";
            // line 74
            echo " 01/01/2017
        </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class=\"fa fa-envelope bg-blue\"></i>
        <div class=\"timeline-item\">
            <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

            <h3 class=\"timeline-header\"><a href=\"#\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "name", array()), "html", null, true);
            echo "</a></h3>

            <div class=\"timeline-body\">
                ";
            // line 88
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
    <!-- END timeline item -->
";
            
            $__internal_d68c497b973bb47a1c72ca9626992339a744d9efced447ac0ca34b8f08d7e545->leave($__internal_d68c497b973bb47a1c72ca9626992339a744d9efced447ac0ca34b8f08d7e545_prof);

            
            $__internal_454f6232717cd7c7ca26c84033c8adbb146b9b5eaffac29979c69ce3cf81042e->leave($__internal_454f6232717cd7c7ca26c84033c8adbb146b9b5eaffac29979c69ce3cf81042e_prof);

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
        return "@DevLeagues/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 88,  318 => 85,  305 => 74,  300 => 71,  282 => 70,  249 => 57,  242 => 52,  224 => 51,  200 => 47,  196 => 46,  190 => 45,  187 => 44,  169 => 43,  132 => 28,  125 => 23,  107 => 22,  70 => 7,  63 => 2,  45 => 1,  34 => 69,  31 => 50,  28 => 42,  25 => 21,);
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

{% macro my_challenge_reduced(challenge) %}
<tr>
  <th><a href=\"{{ path('show_challenge',{challengeId: challenge.id}) }}\">{{challenge.name}}</a></th>
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
\t\t\t\t\t\t<a href=\"#\"><h3>{{user.username}}</h3></a>
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
    <!-- timeline time label -->
    <li class=\"time-label\">
        <span class=\"bg-red\">
            {#{{ news.date }}#} 01/01/2017
        </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
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
    <!-- END timeline item -->
{% endmacro %}
", "@DevLeagues/macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/macros.html.twig");
    }
}
