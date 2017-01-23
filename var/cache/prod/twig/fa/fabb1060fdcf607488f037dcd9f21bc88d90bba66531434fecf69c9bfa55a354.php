<?php

/* DevLeaguesBundle::macros.html.twig */
class __TwigTemplate_5cfaa6654216d6dac1bbd9428186b2e677fd8effcc32fb55dd508eef8ee581a4 extends Twig_Template
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
            // line 2
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_league", array("leagueId" => $this->getAttribute(($context["league"] ?? null), "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["league"] ?? null), "name", array()), "html", null, true);
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
            // line 23
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_challenge", array("challengeId" => $this->getAttribute(($context["challenge"] ?? null), "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? null), "name", array()), "html", null, true);
            echo "</h3></a>

\t\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? null), "description", array()), "html", null, true);
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
            // line 44
            echo "<tr>
  <th><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_challenge", array("challengeId" => $this->getAttribute(($context["challenge"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? null), "name", array()), "html", null, true);
            echo "</a></th>
  <th>End : ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["challenge"] ?? null), "endTimestamp", array()), "m/d/Y"), "html", null, true);
            echo "</th>
  <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? null), "description", array()), "html", null, true);
            echo "</th>
</tr>
";
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
            // line 52
            echo "\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<a href=\"#\"><h3>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? null), "name", array()), "html", null, true);
            echo "</a></h3>

            <div class=\"timeline-body\">
                ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? null), "content", array()), "html", null, true);
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
        return array (  257 => 84,  251 => 81,  241 => 73,  237 => 71,  225 => 70,  198 => 57,  191 => 52,  179 => 51,  161 => 47,  157 => 46,  151 => 45,  148 => 44,  136 => 43,  109 => 30,  102 => 28,  95 => 23,  83 => 22,  52 => 7,  45 => 2,  33 => 1,  28 => 69,  25 => 50,  22 => 42,  19 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle::macros.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/macros.html.twig");
    }
}
