<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_f62aa490e5c93335c4deb97d0b929fe9b70ad50edaa6c15ab1c5ef54a3a93d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c38eb3cb439a2b2002dc9b25a30cae385a4c1ccdd7bf5a462bb2d9c94b833705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38eb3cb439a2b2002dc9b25a30cae385a4c1ccdd7bf5a462bb2d9c94b833705->enter($__internal_c38eb3cb439a2b2002dc9b25a30cae385a4c1ccdd7bf5a462bb2d9c94b833705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_a6aca51d0b8fbab4f9dbdc48fafb6d393f7c3d6b4c098c8b2245076a60d8adad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6aca51d0b8fbab4f9dbdc48fafb6d393f7c3d6b4c098c8b2245076a60d8adad->enter($__internal_a6aca51d0b8fbab4f9dbdc48fafb6d393f7c3d6b4c098c8b2245076a60d8adad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38eb3cb439a2b2002dc9b25a30cae385a4c1ccdd7bf5a462bb2d9c94b833705->leave($__internal_c38eb3cb439a2b2002dc9b25a30cae385a4c1ccdd7bf5a462bb2d9c94b833705_prof);

        
        $__internal_a6aca51d0b8fbab4f9dbdc48fafb6d393f7c3d6b4c098c8b2245076a60d8adad->leave($__internal_a6aca51d0b8fbab4f9dbdc48fafb6d393f7c3d6b4c098c8b2245076a60d8adad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7167750df2bb32fdd7c4db71b7c46a00137236c3a38d3ebcb544f687f924385f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7167750df2bb32fdd7c4db71b7c46a00137236c3a38d3ebcb544f687f924385f->enter($__internal_7167750df2bb32fdd7c4db71b7c46a00137236c3a38d3ebcb544f687f924385f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13897c384f335a38c221327c61405df806e1d11ac888377503040cb7d378fde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13897c384f335a38c221327c61405df806e1d11ac888377503040cb7d378fde4->enter($__internal_13897c384f335a38c221327c61405df806e1d11ac888377503040cb7d378fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table class=\"table table-striped table-hover table-sm table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"text-center\">Starred</th>
\t\t\t<th>Favicon</th>
\t\t\t<th>Path</th>
\t\t\t<th>Version</th>
\t\t\t<th>Link</th>
\t\t\t<th>Operations</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["symfonies"]) ? $context["symfonies"] : $this->getContext($context, "symfonies")));
        foreach ($context['_seq'] as $context["_key"] => $context["symfony"]) {
            // line 17
            echo "\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t<a href=\"#\" data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-star";
            echo (($this->getAttribute($context["symfony"], "starred", array())) ? (" text-warning") : ("-o"));
            echo " starControl\" aria-hidden=\"true\"></a>
\t\t\t\t</th>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 23
                echo "\t\t\t\t\t\t<img src=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo "/favicon.ico\" alt=\"\" width=\"16\">
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t--
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "path", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "version", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"colLink\">
\t\t\t\t\t";
            // line 35
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 36
                echo "\t\t\t\t\t\t<a href=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "entryPoint", array()), "html", null, true);
                echo "\">http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "entryPoint", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t<span class=\"text-danger\">Stopped</span>
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 42
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 43
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stop", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm swalContinue\">Stop</a>
\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalSymfony";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Start</a>

\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalSymfony";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSymfony";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalSymfony";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "Label\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "path", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ip";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">IP</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ip";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"ip\" placeholder=\"IP\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#ip";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" data-val=\"127.0.0.1\">Set to 127.0.0.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"port";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Port</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"port";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"port\" placeholder=\"Port\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#port";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" data-val=\"8000\">Set to 8000</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"entry";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Entry point</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"entry";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"entry\" placeholder=\"Entry point\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 82
            echo "
\t\t\t\t\t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm swalContinue\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symfony'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_13897c384f335a38c221327c61405df806e1d11ac888377503040cb7d378fde4->leave($__internal_13897c384f335a38c221327c61405df806e1d11ac888377503040cb7d378fde4_prof);

        
        $__internal_7167750df2bb32fdd7c4db71b7c46a00137236c3a38d3ebcb544f687f924385f->leave($__internal_7167750df2bb32fdd7c4db71b7c46a00137236c3a38d3ebcb544f687f924385f_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c86cd1e716f4b0ef3b290fdec87d109df7cededd2329bc1ca5cd50a450ebeeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86cd1e716f4b0ef3b290fdec87d109df7cededd2329bc1ca5cd50a450ebeeaa->enter($__internal_c86cd1e716f4b0ef3b290fdec87d109df7cededd2329bc1ca5cd50a450ebeeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb6d259aab951e0465920e610c58164097f7d5d1495ca9501009add0ffc822c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6d259aab951e0465920e610c58164097f7d5d1495ca9501009add0ffc822c8->enter($__internal_bb6d259aab951e0465920e610c58164097f7d5d1495ca9501009add0ffc822c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/scripts/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bb6d259aab951e0465920e610c58164097f7d5d1495ca9501009add0ffc822c8->leave($__internal_bb6d259aab951e0465920e610c58164097f7d5d1495ca9501009add0ffc822c8_prof);

        
        $__internal_c86cd1e716f4b0ef3b290fdec87d109df7cededd2329bc1ca5cd50a450ebeeaa->leave($__internal_c86cd1e716f4b0ef3b290fdec87d109df7cededd2329bc1ca5cd50a450ebeeaa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 92,  245 => 91,  233 => 87,  223 => 83,  220 => 82,  205 => 70,  201 => 69,  195 => 66,  191 => 65,  187 => 64,  181 => 61,  177 => 60,  173 => 59,  167 => 56,  157 => 51,  148 => 47,  142 => 45,  136 => 43,  134 => 42,  130 => 40,  126 => 38,  112 => 36,  110 => 35,  104 => 32,  98 => 29,  94 => 27,  90 => 25,  82 => 23,  80 => 22,  72 => 19,  68 => 17,  64 => 16,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
\t<table class=\"table table-striped table-hover table-sm table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"text-center\">Starred</th>
\t\t\t<th>Favicon</th>
\t\t\t<th>Path</th>
\t\t\t<th>Version</th>
\t\t\t<th>Link</th>
\t\t\t<th>Operations</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% for symfony in symfonies %}
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t<a href=\"#\" data-id=\"{{ symfony.id }}\" class=\"fa fa-star{{ symfony.starred ? ' text-warning' : '-o' }} starControl\" aria-hidden=\"true\"></a>
\t\t\t\t</th>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<img src=\"http://{{ symfony.ip }}:{{ symfony.port }}/favicon.ico\" alt=\"\" width=\"16\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t--
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{{ symfony.path }}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{{ symfony.version }}
\t\t\t\t</td>
\t\t\t\t<td class=\"colLink\">
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<a href=\"http://{{ symfony.ip }}:{{ symfony.port }}{{ symfony.entryPoint }}\">http://{{ symfony.ip }}:{{ symfony.port }}{{ symfony.entryPoint }}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"text-danger\">Stopped</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<a href=\"{{ path('stop', {'symfony': symfony.id}) }}\" class=\"btn btn-warning btn-sm swalContinue\">Stop</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalSymfony{{ symfony.id }}\">Start</a>

\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalSymfony{{ symfony.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSymfony{{ symfony.id }}Label\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalSymfony{{ symfony.id }}Label\">{{ symfony.path }}</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('start', {'symfony': symfony.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ip{{ symfony.id }}\">IP</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ip{{ symfony.id }}\" name=\"ip\" placeholder=\"IP\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#ip{{ symfony.id }}\" data-val=\"127.0.0.1\">Set to 127.0.0.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"port{{ symfony.id }}\">Port</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"port{{ symfony.id }}\" name=\"port\" placeholder=\"Port\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#port{{ symfony.id }}\" data-val=\"8000\">Set to 8000</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"entry{{ symfony.id }}\">Entry point</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"entry{{ symfony.id }}\" name=\"entry\" placeholder=\"Entry point\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"{{ path('delete', {'symfony': symfony.id}) }}\" class=\"btn btn-danger btn-sm swalContinue\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('bundles/app/scripts/app.js') }}\"></script>
{% endblock %}
", "AppBundle:Default:index.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
